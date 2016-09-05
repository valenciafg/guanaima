import {Component, OnInit} from '@angular/core';
import {ArticlesService} from './services/articles.service';
import {Router} from '@angular/router';

@Component({
    selector: 'router-outlet',
    template: `
			<h3>Articles</h3>
			<ul *ngIf="articles">
				<li *ngFor="#article of articles"
						(click)="onSelect(article)">
					<span>{{ article.title.rendered }}</span>
          <p [innerHTML]="article.excerpt.rendered"></p>
				</li>
			</ul>
		`,
    providers: [ArticlesService]
})
export class ArticlesComponent implements OnInit {
    public articles:any;
    constructor( private _articlesService: ArticlesService ) { }

    ngOnInit() {
        this.listArticles();
    }

    listArticles() {
        this._articlesService.getArticles()
            .subscribe(res => {
                    this.articles = JSON.parse(res.text());
                },
                error => console.error('oops it did not work'));
    }

}