import {AppComponent} from './base';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';
import {bootstrap} from '@angular/platform-browser-dynamic';
import {HTTP_PROVIDERS} from '@angular/http';

bootstrap(AppComponent, [HTTP_PROVIDERS]);
