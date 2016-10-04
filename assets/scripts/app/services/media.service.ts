import {Injectable} from '@angular/core';
import {Http} from '@angular/http';

@Injectable()
export class MediaService {

    constructor(private http: Http) { }

    private _wpBase = 'http://victor-pc/guanaima/wp-json/wp/v2/';

    getAllMedia() {
        return this.http.get(this._wpBase + 'media');
    }

    getMediaByFilter(taxonomy: any, term: any) {
        return this.http.get(this._wpBase + 'media?filter[taxonomy]=' + taxonomy + '&filter[term]=' +term);
    }

}