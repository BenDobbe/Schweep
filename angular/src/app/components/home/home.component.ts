import { Component, OnInit } from '@angular/core';
import { AuthService } from 'src/app/services/auth.service';
import { HeaderService } from 'src/app/services/header.service';
import { PostService } from 'src/app/services/post.service';
import { User } from 'src/app/models/user';
import { FormGroup, FormBuilder } from '@angular/forms';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {
  currentUser: User;
  following: string;
  selectedFile: File;
  postSelfie: FormGroup;
  errors: String;

  constructor(
    private headerService: HeaderService,
    private postService: PostService,
    private authService: AuthService,
    private fb: FormBuilder) { }

  ngOnInit() {
    setTimeout(() => {
      this.headerService.setTitle('Home');
    });
    this.getCurrentUser();
  }
  getCurrentUser() {
    this.authService.getCurrentUser<User>().subscribe(user => {
      this.currentUser = user;
      if (user.acf.following) {
        const authors = user.acf.following.toString() + ',' + user.id.toString();
      } else {
      }
    }, err => {
      console.error(err);
    });
  }

  openModal(id) {
    const modal = document.getElementById('delete' + id);
    modal.style.display = 'block';
  }

  closeModal(id) {
    const modal = document.getElementById('delete' + id);
    modal.style.display = 'none';
  }
}
