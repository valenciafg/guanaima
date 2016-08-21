import {Component} from '@angular/core';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';
// import {TopNavComponent} from './layouts/topnav/topnav';


@NgModule({
  declarations: [AppComponent],
  imports: [NgbModule],
  bootstrap: [AppComponent]
})

@Component({
  selector: 'my-app',
  template: `
      <top-nav></top-nav>
      <h1>Angular 2 WP Theme</h1>
    `//,
  // directives: [TopNavComponent]
})

export class AppComponent { }
