/*
import { Component } from '@angular/core';
@Component({
  selector: 'my-app',
  template: '<h1>My First Angular 2 App</h1>'
})
export class AppComponent { }
*/
import {Component} from '@angular/core';
import {ArticlesComponent} from './articles.component';

@Component({
  selector: 'my-app',
  template: `
      <h1>Angular 2 WP Theme</h1>
      <router-outlet></router-outlet>
    `,
  directives: [ArticlesComponent]
})

export class AppComponent { }