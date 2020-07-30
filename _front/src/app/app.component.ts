import { Component } from '@angular/core';
import { CategoriaHttpService } from "./services/http/categoria-http.service";
import {Observable} from "rxjs";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html'
})
export class AppComponent {
  categorias$: Observable<any>;

  constructor(private categoriaHttpService: CategoriaHttpService) {
    this.loadCategories();
  }

  loadCategories() {
    this.categorias$ = this.categoriaHttpService.list();
    this.categorias$.subscribe((response) => {
      console.log(response);
    });
  }
}
