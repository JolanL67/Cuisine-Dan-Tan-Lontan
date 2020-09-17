export const ADD_TO_CART = 'ADD_TO_CART';
export const SAVE_TO_CART = 'SAVE_TO_CART';
export const GET_ALL_MEAL = 'GET_ALL_MEAL';
export const SAVE_ALL_MEAL = 'SAVE_ALL_MEAL';


export const getAllMeal = () => ({
  type: GET_ALL_MEAL,
});

export const saveAllMeal = (meal) => ({
  type: SAVE_ALL_MEAL,
  meal,
});


export const addToCart = () => ({
  type: ADD_TO_CART,
});

export const saveToCart = (item) => ({
  type: SAVE_TO_CART,
  item,
});
