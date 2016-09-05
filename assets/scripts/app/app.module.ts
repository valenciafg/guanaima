import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }    from '@angular/forms';

import { AppComponent }  from './app.component';
import { ClickMeComponent } from './click-me.component';
import { LandingFormComponent }  from './pages/landing/components/landing-form.component';

@NgModule({
    imports: [
      BrowserModule,
      FormsModule
    ],
    declarations: [
      AppComponent,
      ClickMeComponent,
      LandingFormComponent
    ],
    bootstrap:    [ AppComponent ]
})
export class AppModule { }