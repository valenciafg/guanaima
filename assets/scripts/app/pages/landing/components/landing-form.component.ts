import { Component, OnInit } from '@angular/core';

// import { Image } from '../../../image';

@Component({
  selector: 'landing-image-form',
  template: require('./landing-form.component.html')
})
export class LandingFormComponent {
  // imagenes = [
  //   new Image(1,'img1','http://asdas.com'),
  //   new Image(2,'img2','http://asdas.com'),
  //   new Image(3,'img3','http://asdas.com')
  // ];
  // myImagen = this.imagenes[0];
  // clickMessage = '';
  submitted = false;
  onSubmit() { this.submitted = true; }
  // onClickMe() {
  //   this.clickMessage = 'You are my hero!';
  // }
  // get diagnostic() { return JSON.stringify(this.imagenes); }
}
