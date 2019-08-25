import { Component, OnInit } from '@angular/core';
import { TipsService } from 'src/app/services/tips.service';
import { Tip } from 'src/app/models/tip';
import { DomSanitizer } from '@angular/platform-browser';
import { HeaderService } from 'src/app/services/header.service';

@Component({
  selector: 'app-tips',
  templateUrl: './tips.component.html',
  styleUrls: ['./tips.component.scss']
})
export class TipsComponent implements OnInit {
  tips: Tip[];
  imageTips: Tip[];
  public show = false;
  public showImage = false;
  public showVideo = false;
  public buttonName: any = 'Show some tips!';
  public buttonNameImage: any = 'Show some memes!';
  public buttonNameVideo: any = 'Show some videos!';

  constructor(
    private tipsService: TipsService,
    private headerService: HeaderService,
    private sanitizer: DomSanitizer
  ) { }

  ngOnInit() {
    setTimeout(() => {
      this.headerService.setTitle('Tips');
    });
    this.getTips();
  }

  sanitize(url) {
    return this.sanitizer.bypassSecurityTrustResourceUrl(url);
  }

  getTips() {
    this.tipsService.getTips<Tip[]>().subscribe(res => {
      this.tips = res;
      console.log(res);
    }, err => {
      console.error(err);
    });
  }

  toggleTips() {
    this.show = !this.show;
    // CHANGE THE NAME OF THE BUTTON.
    if (this.show) {
      this.buttonName = 'Hide them!';
    } else {
      this.buttonName = 'Show some tips!';
    }
  }

  toggleImages() {
    this.showImage = !this.showImage;
    // CHANGE THE NAME OF THE BUTTON.
    if (this.showImage) {
      this.buttonNameImage = 'Hide them!';
    } else {
      this.buttonNameImage = 'Show some memes!';
    }
  }

  toggleVideos() {
    this.showVideo = !this.showVideo;
    // CHANGE THE NAME OF THE BUTTON.
    if (this.showVideo) {
      this.buttonNameVideo = 'Hide them!';
    } else {
      this.buttonNameVideo = 'Show some videos!';
    }
  }
}
