import {Component, ViewEncapsulation} from '@angular/core';
import { ROUTER_DIRECTIVES } from '@angular/router';
import { CORE_DIRECTIVES } from '@angular/common';

@Component({
    // moduleId: module.id,
    selector: 'top-nav',
    template: "<h3>aqui va topnav</h3>"
    // templateUrl: 'topnav.component.html',
    // encapsulation: ViewEncapsulation.None,
    // directives: [CORE_DIRECTIVES, ROUTER_DIRECTIVES]
})

export class TopNavComponent {}
