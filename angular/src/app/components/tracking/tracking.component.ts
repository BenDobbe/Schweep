import { Component, OnInit } from '@angular/core';
import { User } from 'src/app/models/user';
import { HeaderService } from 'src/app/services/header.service';
import { ProfileService } from 'src/app/services/profile.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { TrackingService } from 'src/app/services/tracking.service';
import * as moment from 'moment';
import { Route } from '@angular/compiler/src/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-tracking',
  templateUrl: './tracking.component.html',
  styleUrls: ['./tracking.component.scss']
})
export class TrackingComponent implements OnInit {
  errors: String;
  trackingForm: FormGroup;
  user: User;

  constructor(
    private profileService: ProfileService,
    private fb: FormBuilder,
    private headerService: HeaderService,
    private trackingService: TrackingService,
    private router: Router
  ) { }

  ngOnInit() {
    setTimeout(() => {
      this.headerService.setTitle('Slaapgegevens invullen');
    });
    this.trackingForm = this.fb.group({
      sleepStart: ['', Validators.required],
      sleepEnd: ['', Validators.required],
      deep: [2.5, Validators.required],
      rested: [2.5, Validators.required]
    });
    this.getCurrentUser();
  }

  getCurrentUser() {
    this.profileService.getCurrentUser<User>().subscribe(user => {
      console.log(user);
      this.user = user;
    }, err => {
      console.error(err);
    });
  }

  postTracking() {
    const sleepStart = this.trackingForm.value.sleepStart;
    const sleepEnd = this.trackingForm.value.sleepEnd;

    const data = {
      'fields': {
        'sleep_start': sleepStart.toString(),
        'sleep_end': sleepEnd.toString(),
        'sleep_deep': this.trackingForm.value.deep,
        'sleep_rest': this.trackingForm.value.rested
      }
    };
    if (this.trackingForm.valid) {
      if (moment(sleepEnd).isSameOrAfter(sleepStart)) {
        this.trackingService.postEmptyTracking().subscribe(res => {
          this.trackingService.updateTracking(data, res.id).subscribe(result => {
            console.log(result);
            this.router.navigate(['stats']);
          }, error => {
            console.log(error);
            this.errors = error;
          });
        });
      } else {
        this.errors = 'De einddatum moet na de startdatum plaatsvinden.';
      }
    } else {
      this.errors = 'Je moet alle velden invullen.';
    }
  }

}
