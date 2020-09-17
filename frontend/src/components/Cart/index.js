import React from 'react';
import './cart.scss';

const Cart = () => (

  <div className="cart">
    <div className="cart_content">
      <div className="cart_content_cart">
        <p>Votre panier :</p>
      </div>
      <div className="cart_content_cart_list">
        <ul>
          <li className="cart_content_cart_list_item">Rougaille Saucisse x2</li>
          <li className="cart_content_cart_list_item">Nems poulet x6</li>
          <li className="cart_content_cart_list_item">Rougaille Saucisse x2</li>
          <li className="cart_content_cart_list_item">Nems poulet x6</li>
          <li className="cart_content_cart_list_item">Rougaille Saucisse x2</li>
          <li className="cart_content_cart_list_item">Nems poulet x6</li>
          <li className="cart_content_cart_list_item">Rougaille Saucisse x2</li>
          <li className="cart_content_cart_list_item">Nems poulet x6</li>
          <li className="cart_content_cart_list_item">Rougaille Saucisse x2</li>
          <li className="cart_content_cart_list_item">Nems poulet x6</li>
          <li className="cart_content_cart_list_item">Rougaille Saucisse x2</li>
          <li className="cart_content_cart_list_item">Nems poulet x6</li>
        </ul>
      </div>
    </div>
    <div className="cart_price">
      <p>Total TTC : <span>15€90</span></p>
    </div>
  </div>
);

export default Cart;
