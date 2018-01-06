import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { AddSignupPage } from './add-signup';

@NgModule({
  declarations: [
    AddSignupPage,
  ],
  imports: [
    IonicPageModule.forChild(AddSignupPage),
  ],
})
export class AddSignupPageModule {}
