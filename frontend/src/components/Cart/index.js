import React from 'react';
import './cart.scss';

const Cart = ({ cart, total }) => {
  if (cart.length === 0) {
    return (
      <div className="cart">
        <div className="cart_content">
          <div className="cart_content_cart">
            <p>Votre panier :</p>
          </div>
          <div className="cart_content_cart_list">
            <ul>
              <li>Votre panier est vide</li>
            </ul>
          </div>
        </div>
      </div>
    );
  } if (cart.length !== 0) {
    return (
      <div className="cart">
        <div className="cart_content">
          <div className="cart_content_cart">
            <p>Votre panier :</p>
          </div>
          <div className="cart_content_cart_list">
            <ul>
              {cart.map((item) => {
                console.log(item.name);
                return (
                  <li className="cart_content_cart_list_item">{item.name}</li>
                );
              })}
            </ul>
          </div>
        </div>
        <div className="cart_price">
          <p>Total TTC : <span>{ total }€</span></p>
        </div>
      </div>
    );
  }
};

export default Cart;
