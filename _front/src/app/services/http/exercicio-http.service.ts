import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import { BaseHttpService } from "./base-http.service";
import { Exercicio } from "../../model";

@Injectable({
  providedIn: 'root'
})
export class ExercicioHttpService extends BaseHttpService< Exercicio >{

  constructor(public http: HttpClient) {
    super(http);
    this.uri += "/exercicio";
  }
}
