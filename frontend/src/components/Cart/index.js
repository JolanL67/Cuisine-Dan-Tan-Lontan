import React from 'react';
import ClearIcon from '@material-ui/icons/Clear';

import './cart.scss';


const Cart = ({ cart, total, removeItem, cartForData }) => {


  const handleClickRemoveItem = (e) =>{
    removeItem(e.currentTarget.id, e.currentTarget.value);
  };

  function onlyUnique(value, index, self) {
    return self.indexOf(value) === index;
  }

  const unique = cart.filter(onlyUnique);

  const newCart = [];

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
              {unique.map((item) => {
                let count = 0;
                for (let i = 0; i < cart.length; ++i) {
                  if (cart[i].name === item.name) {
                    count++;
                  }
                }
                if (count >= 1) {
                  newCart.push(item.name +' x '+ count);
                  cartForData(newCart);
                  return (
                    <li className="cart_content_cart_list_item">{item.name} x {count}<button onClick={handleClickRemoveItem} id={item.name} value={item.price}><ClearIcon/></button> </li>
                  );
                }
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
