import {Component, ViewEncapsulation} from '@angular/core';
import { ROUTER_DIRECTIVES } from '@angular/router';
import {CORE_DIRECTIVES} from '@angular/common';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';

@Component({
    moduleId: module.id,
    selector: 'top-nav',
    templateUrl: 'topnav.html',
    encapsulation: ViewEncapsulation.None,
    directives: [NgbModule, CORE_DIRECTIVES, ROUTER_DIRECTIVES]
})

export class TopNavComponent {}
