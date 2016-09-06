// import {Component} from '@angular/core';
// import {ArticlesComponent} from './articles.component';
//
// @Component({
//   selector: 'my-app',
//   template: `
//       <h1>Angular 2 WP Theme</h1>
//       <router-outlet></router-outlet>
//     `,
//   directives: [ArticlesComponent]
// })
//
// export class AppComponent { }
// import { Component } from '@angular/core';
// @Component({
//   selector: 'hola-angular2',
//   template: '<h1>My First Angular 2 App</h1>'
// })
// export class AppComponent { }

// import { Component } from '@angular/core';
// @Component({
//   selector: 'hola-angular2',
//   template: '<hero-form></hero-form>'
// })
// export class AppComponent { }

import { Component } from '@angular/core';
import { Image } from './image';
@Component({
  selector: 'search-images',
  template: require('./app.component.html'),
  styles: [`
  .landing-overlay-content {
    color:#fff;
    position:absolute;
    z-index:12;
    top:50%;
    left:0;
    width:100%;
    text-align:center;
    padding: 25px;
  }
  `]
})
export class AppComponent {
  siteName: string;
  constructor(){
    this.siteName = 'Guanaima';
  }
}
