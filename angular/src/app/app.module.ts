import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms'; // <-- NgModel lives here
import { HttpClientModule, HTTP_INTERCEPTORS } from '@angular/common/http';
import { HttpModule } from '@angular/http';
import { MomentModule } from 'ngx-moment';

import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';

import { AppComponent } from './app.component';
import { LoginComponent } from './components/login/login.component';
import { RegisterComponent } from './components/register/register.component';
import { HomeComponent } from './components/home/home.component';
import { AppRoutingModule } from './modules/app-routing/app-routing.module';
import { HeaderComponent } from './components/header/header.component';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import { MaterialModule } from './modules/material/material.module';
import { SidenavService } from './services/sidenav-service.service';
import { AuthGuardService } from './services/auth-guard.service';
import { ProfilesComponent } from './components/profiles/profiles.component';
import { ProfileSettingsComponent } from './components/profiles/profile-settings/profile-settings.component';
import { TokenService } from './interceptor/token.service';
import { MAT_DATE_LOCALE } from '@angular/material';
import { TipsComponent } from './components/tips/tips.component';
import { QuizComponent } from './components/quiz/quiz.component';
import { TrackingComponent } from './components/tracking/tracking.component';
import { StatsComponent } from './components/stats/stats.component';
import { TodosComponent } from './components/todos/todos.component';
import { TodoItemComponent } from './components/todo-item/todo-item.component';
import { AddTodoComponent } from './components/add-todo/add-todo.component';
import { ProfileEditComponent } from './components/profiles/profile-edit/profile-edit.component';
import { FriendsComponent } from './components/profiles/friends/friends.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    RegisterComponent,
    HomeComponent,
    HeaderComponent,
    ProfilesComponent,
    ProfileSettingsComponent,
    TipsComponent,
    QuizComponent,
    TrackingComponent,
    StatsComponent,
    TodosComponent,
    TodoItemComponent,
    AddTodoComponent,
    ProfileEditComponent,
    FriendsComponent,
  ],
  imports: [
    BrowserModule,
    FormsModule,
    AppRoutingModule,
    HttpClientModule,
    HttpModule,
    BrowserAnimationsModule,
    MaterialModule,
    FormsModule,
    ReactiveFormsModule,
    MomentModule,
    FontAwesomeModule,
  ],
  providers: [
    SidenavService,
    AuthGuardService,
    {
      provide: HTTP_INTERCEPTORS,
      useClass: TokenService,
      multi: true
    },
    // {
    //   provide: MAT_DATE_LOCALE,
    //   useValue: 'nl-BE'
    // },
  ],

  bootstrap: [AppComponent]
})
export class AppModule {
  constructor() {
    // Add an icon to the library for convenient access in other components
    library.add(fas);
  }
 }
