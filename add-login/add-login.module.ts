import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { AddLoginPage } from './add-login';

@NgModule({
  declarations: [
    AddLoginPage,
  ],
  imports: [
    IonicPageModule.forChild(AddLoginPage),
  ],
})
export class AddLoginPageModule {}
