import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { HomeComponent } from '../../components/home/home.component';
import { LoginComponent } from '../../components/login/login.component';
import { RegisterComponent } from '../../components/register/register.component';
import { ProfileSettingsComponent } from 'src/app/components/profiles/profile-settings/profile-settings.component';
import { ProfileEditComponent } from 'src/app/components/profiles/profile-edit/profile-edit.component';
import { FriendsComponent } from 'src/app/components/profiles/friends/friends.component';
import { ProfilesComponent } from 'src/app/components/profiles/profiles.component';
import { TipsComponent } from 'src/app/components/tips/tips.component';
import { QuizComponent } from 'src/app/components/quiz/quiz.component';
import { TrackingComponent } from 'src/app/components/tracking/tracking.component';
import { StatsComponent } from 'src/app/components/stats/stats.component';
import { TodosComponent } from 'src/app/components/todos/todos.component';

import { AuthGuardService as AuthGuard } from './../../services/auth-guard.service';

const routes: Routes = [
  { path: '', component: HomeComponent, canActivate: [AuthGuard] },
  { path: 'login', component: LoginComponent },
  { path: 'register', component: RegisterComponent},
  //{ path: 'profile/:id/settings', component: ProfileSettingsComponent, canActivate: [AuthGuard] },
  { path: 'profiles/settings', component: ProfileSettingsComponent, canActivate: [AuthGuard] },
  { path: 'profiles/edit', component: ProfileEditComponent, canActivate: [AuthGuard] },
  { path: 'profiles/friends', component: FriendsComponent, canActivate: [AuthGuard] },
  { path: 'profiles', component: ProfilesComponent, canActivate: [AuthGuard] },
  { path: 'todo', component: TodosComponent, canActivate: [AuthGuard] },
  { path: 'tips', component: TipsComponent, canActivate: [AuthGuard] },
  { path: 'quiz', component: QuizComponent, canActivate: [AuthGuard] },
  { path: 'tracking', component: TrackingComponent, canActivate: [AuthGuard] },
  { path: 'slaapgegevens', component: StatsComponent, canActivate: [AuthGuard] },

];

@NgModule({
  imports: [ RouterModule.forRoot(routes) ],
  exports: [ RouterModule ]
})
export class AppRoutingModule {}
