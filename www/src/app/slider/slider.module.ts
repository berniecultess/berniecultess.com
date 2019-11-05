import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
// import { MaterialModule } from '../material/material.module';
import { MatSliderModule } from '@angular/material/slider';



@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    MatSliderModule,
  ],
  exports: [
    CommonModule,
    MatSliderModule,
  ]
})
export class SliderModule { }
