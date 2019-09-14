import { Controller } from "stimulus"

export default class extends Controller {
  connect() {
    console.log(`Hello!`)
  }

  toto() {
    console.log(`Toto!`)
  }
}