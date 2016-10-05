import {Component, OnInit} from '@angular/core';
import { Media } from '../../services/media';
import { MediaService } from '../../services/media.service';
@Component({
  selector: 'landing-carousel',
  template: require('./landing-carousel.component.html'),
  providers: [
    MediaService
  ]
})
export class LandingCarouselComponent implements OnInit {
  media: Media[];
  constructor( private mediaService: MediaService){ }
  getLandingMedia(): void {
    this.mediaService.getLandingMedia().subscribe(response => this.media = response);
    console.log(this.media);
  }
  ngOnInit(): void {
    this.getLandingMedia();
  }
}
