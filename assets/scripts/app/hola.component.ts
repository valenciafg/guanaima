import {Component} from '@angular/core';

@Component({
  selector: 'hola-angular',
  template: "<h2>{{saludo}}</h2>"
})

export class HolaComponent {
  saludo: string;
  constructor(){
    this.saludo = 'Hola ANGULAR 2';
  }
}
