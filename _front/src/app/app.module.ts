import { BrowserModule } from '@angular/platform-browser';
import { NgModule, NO_ERRORS_SCHEMA } from '@angular/core';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { HttpClientModule } from "@angular/common/http";
import { AppRoutingModule } from "./app-routing.module";
import { CommonAppModule } from "./common/common-app.module";
import { MDBBootstrapModule } from "angular-bootstrap-md";
import { AppComponent } from './app.component';
import { RouterModule } from "@angular/router";
import { CommonModule } from "@angular/common";

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    CommonModule,
    HttpClientModule,
    NgbModule,
    AppRoutingModule,
    MDBBootstrapModule.forRoot(),
    RouterModule,
    CommonAppModule
  ],
  schemas: [ NO_ERRORS_SCHEMA ],
  providers: [],
  bootstrap: [ AppComponent ]
})
export class AppModule { }
