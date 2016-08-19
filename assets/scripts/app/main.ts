/*import { bootstrap }    from '@angular/platform-browser-dynamic';
import { AppComponent } from './app.component';
bootstrap(AppComponent); */
import {AppComponent} from './app.component';
import {bootstrap} from '@angular/platform-browser-dynamic';
import {HTTP_PROVIDERS} from '@angular/http';

bootstrap(AppComponent, [HTTP_PROVIDERS]);
