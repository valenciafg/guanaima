import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpModule }    from '@angular/http';
import { FormsModule }    from '@angular/forms';

import {NgbModule} from '@ng-bootstrap/ng-bootstrap';

import { AppComponent }  from './app.component';
// import { ClickMioComponent } from './click-mio.component';
import { LandingCarouselComponent } from './layouts/carousel/landing-carousel.component';
// import { ClickMeComponent } from './click-me.component';
import { LandingFormComponent }  from './pages/landing/components/landing-form.component';
//
@NgModule({
    imports: [
      BrowserModule,
        HttpModule,
      FormsModule,
      NgbModule
    ],
    declarations: [
      AppComponent,
      // ClickMioComponent,
      LandingCarouselComponent,
      LandingFormComponent
    ],
    bootstrap:    [ AppComponent ]
})
export class AppModule { }
