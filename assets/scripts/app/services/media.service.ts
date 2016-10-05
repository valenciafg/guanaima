import {Injectable} from '@angular/core';
import {Http, Response} from '@angular/http';
import { Observable } from 'rxjs/Observable';

import 'rxjs/add/operator/map';

import { Media } from './media';

@Injectable()
export class MediaService {

    constructor(private http: Http) { }

    private _wpBase = 'http://victor-pc/guanaima/wp-json/wp/v2/';

    getAllMedia() {
        return this.http.get(this._wpBase + 'media');
    }
    getAllMedia2(): Promise<any> {
        return Promise.resolve(this.http.get(this._wpBase + 'media'));
        //return this.http.get(this._wpBase + 'media');
    }
    getLandingMedia(): Observable<Media[]> {
        return this.http
            .get(this._wpBase + 'media?per_page=5&filter[orderby]=rand&filter[taxonomy]=media_category&filter[term]=landing')
            .map((res: Response) => res.json());

    }
    getMediaByFilter(taxonomy: any, term: any) {
        return this.http.get(this._wpBase + 'media?filter[taxonomy]=' + taxonomy + '&filter[term]=' +term);
    }

}