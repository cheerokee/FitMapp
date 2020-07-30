import { NgModule } from "@angular/core";
import {
  RouterModule,
  Routes
} from "@angular/router";
import { CommonModule } from "@angular/common";
import { ExercisesComponent } from "./exercises/exercises.component";
import { CategoriesComponent } from "./categories/categories.component";
import { BrowserModule } from "@angular/platform-browser";

const routes: Routes = [
  { path: '', redirectTo: 'categories', pathMatch: 'full' },
  {
    path: 'categories',
    component: CategoriesComponent
  },
  {
    path: 'exercises/:category',
    component: ExercisesComponent
  }
];
@NgModule({
  declarations: [
    CategoriesComponent,
    ExercisesComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes),
    CommonModule
  ],
  exports: [
    RouterModule
  ],
})
export class AppRoutingModule {}
