import React from 'react';
import './cart.scss'

const Cart = () => (

  <div className="cart">
    <div className="cart_content">
      <div className="cart_content_cart">
        <p>Votre panier :</p>
      </div>
      <div>
        <ul>
          <li>item 1</li>
          <li>item 2</li>
          <li>item 3</li>
          <li>item 4</li>
        </ul>
      </div>
      </div>
      <div className="cart_price">
        <p>Total TTC : XX€</p>
      </div>
  </div>
  

);

export default Cart
