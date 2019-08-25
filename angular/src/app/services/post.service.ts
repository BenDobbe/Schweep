import { AuthService } from './auth.service';
import { catchError, tap } from 'rxjs/operators';
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Observable, of, throwError } from 'rxjs';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class PostService {
  errors: String;

  constructor(private http: HttpClient) { }

  public postHashtag(data): Observable<any> {
    return this.http.post(`${environment.apiURL}/hashtag`, data)
    .pipe(
      catchError(this.handleError)
    );
  }

  public uploadFile(data): Observable<any> {
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Disposition': 'attachment; filename=profile.png',
      })
    };

    return this.http.post(`${environment.apiURL}/media`, data, httpOptions)
    .pipe(
      catchError(this.handleError)
    );
  }

  private handleError(errorResponse: HttpErrorResponse) {
    if (errorResponse.error instanceof ErrorEvent) {
      console.error('Client side error: ', errorResponse.error.message);
      this.errors = errorResponse.error.message;
    } else {
      console.error('Server side error: ', errorResponse);
      this.errors = errorResponse.error.message;
    }

    return throwError(this.errors);
  }
}
