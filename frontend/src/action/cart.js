export const ADD_TO_CART = 'ADD_TO_CART';
export const REMOVE_ITEM = 'REMOVE_ITEM';
export const SUBSTRACT_QUANTITY = 'SUBSTRACT_QUANTITY';
export const CART_FOR_DATA = 'CART_FOR_DATA';

export const PRICE_LESS_DISCOUNT = 'PRICE_LESS_DISCOUNT';

export const priceLessDiscount = (discount) => ({
  type: PRICE_LESS_DISCOUNT,
  discount,
});

export const cartForData = (array) => ({
  type: CART_FOR_DATA,
  array,
});

export const addToCart = (item) => ({
  type: ADD_TO_CART,
  item,
});

export const removeItem = (item, itemPrice) => ({
  type: REMOVE_ITEM,
  item,
  itemPrice,
});

export const substractQuantity = (item) => ({
  type: SUBSTRACT_QUANTITY,
  item,
});

