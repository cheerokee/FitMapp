import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import { Observable } from "rxjs";
import { environment } from "../../../environments/environment";

@Injectable({
  providedIn: 'root'
})
export abstract class BaseHttpService <T> {
  uri = `${ environment.api.url }/api`;

  constructor(public http: HttpClient) { }

  list(): Observable<any> {
    return this.http.get(this.uri);
  }
}
