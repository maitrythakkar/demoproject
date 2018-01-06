import { HttpClient ,HttpHeaders} from '@angular/common/http';
import { Injectable } from '@angular/core';

/*
  Generated class for the SignupDbProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class SignupDbProvider {
  url:string="http://localhost:3000/customer/";
  constructor(public http: HttpClient) {
    console.log('Hello SignupDbProvider Provider');
  }
signup(item)
  {
  

  let body=JSON.stringify(item);
    return this.http.post(this.url,body,{headers:new HttpHeaders().set('Content-Type','application/json')});
  }
 /* signup(item)
  {
      let body=JSON.stringify(item);
    //  let header=new Headers({'Content-Type':'application/json'});
    let header=new Headers({'Content-Type':'application/json'});
           return this.http.post(this.url,body,Headers);

  }
*/
}