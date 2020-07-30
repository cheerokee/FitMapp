import {
  Component,
  OnInit
} from '@angular/core';
import { Observable } from "rxjs";
import { CategoriaHttpService } from "../services/http/categoria-http.service";

@Component({
  selector: 'app-categories',
  templateUrl: './categories.component.html'
})
export class CategoriesComponent implements OnInit {

  categorias$: Observable<any>;

  constructor(private categoriaHttpService: CategoriaHttpService) { }

  ngOnInit(): void {
  }

  load() {
    this.categorias$ = this.categoriaHttpService.list();
  }
}
