import { Injectable } from '@angular/core';
import { BaseHttpService } from "./base-http.service";
import { HttpClient } from "@angular/common/http";
import { Categoria } from "../../model";

@Injectable({
  providedIn: 'root'
})
export class CategoriaHttpService extends BaseHttpService< Categoria >{

  constructor(public http: HttpClient) {
    super(http);
    this.uri += "/categoria";
  }
}
