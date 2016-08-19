import {Injectable} from '@angular/core';
import {Http} from '@angular/http';

@Injectable()
export class ArticlesService {

    constructor(private http: Http) { }

    private _wpBase = 'http://victor-laptop/guanaima/wp-json/wp/v2/';

    getArticles() {
        return this.http.get(this._wpBase + 'posts/?page=1');
    }

    getArticle(slug: any) {
        return this.http.get(this._wpBase + 'posts?filter[name]=' + slug + '&_embed');
    }

}