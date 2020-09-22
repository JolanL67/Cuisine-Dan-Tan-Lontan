export const ADD_TO_CART = 'ADD_TO_CART';
export const REMOVE_ITEM = 'REMOVE_ITEM';
export const SUBSTRACT_QUANTITY = 'SUBSTRACT_QUANTITY';
export const ADD_QUANTITY = 'ADD_QUANTITY';


export const addToCart = (item) => ({
  type: ADD_TO_CART,
  item,
});

export const removeItem = (item) => ({
  type: REMOVE_ITEM,
  item,
});

export const substractQuantity = (item) => ({
  type: SUBSTRACT_QUANTITY,
  item,
});

export const addQuantity = (item) => ({
  type: ADD_QUANTITY,
  item,
});
