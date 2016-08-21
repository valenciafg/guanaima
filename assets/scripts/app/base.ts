import {Component, ViewEncapsulation} from '@angular/core';
import {HolaComponent} from './hola.component';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';
 import {TopNavComponent} from './layouts/topnav/topnav';


// @NgModule({
//   declarations: [AppComponent],
//   imports: [NgbModule],
//   bootstrap: [AppComponent]
// })

@Component({
  moduleId: module.id,
  selector: 'guanaima-app',
  template: `
      <top-nav>*****</top-nav>
      <hola-angular>Saludo</hola-angular>
    `,
    encapsulation: ViewEncapsulation.None,
   directives: [TopNavComponent,HolaComponent]
})

export class AppComponent { }
