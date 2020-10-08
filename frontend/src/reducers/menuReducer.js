import { SAVE_ALL_MEAL, GET_TYPE, ALL_MEAL_BY_TYPE } from '../action/menu';
import {
  ADD_TO_CART,
  CART_FOR_DATA,
  PRICE_LESS_DISCOUNT,
  REMOVE_ITEM,
  SUBSTRACT_QUANTITY,
} from '../action/cart';

const initialState = {
  meals: [],
  shortCart: [],
  cart: [],
  total: 0,
  loadingMenu: true,
  typeSelected: 'Plats chaud',
  mealTypeList: [],
};

const menuReducer = (state = initialState, action = {}) => {
  if (action.type === ALL_MEAL_BY_TYPE) {
    return {
      ...state,
      mealTypeList: action.mealList,
    };
  }

  if (action.type === GET_TYPE) {
    return {
      ...state,
      typeSelected: action.typeName,
    };
  }

  if (action.type === SAVE_ALL_MEAL) {
    return {
      ...state,
      meals: action.meal,
      loadingMenu: false,
    };
  }

  if (action.type === CART_FOR_DATA) {
    return {
      ...state,
      shortCart: action.array,
    };
  }

  if (action.type === PRICE_LESS_DISCOUNT) {
    return {
      ...state,
      total: action.discount,
    };
  }

  if (action.type === ADD_TO_CART) {
    const newTotal = +state.total + +action.item.price;
    return {
      ...state,
      cart: [...state.cart, action.item],
      total: newTotal,
    };
  }

  if (action.type === REMOVE_ITEM) {
    const numberOfItems = state.cart.filter((item) => action.item === item.name).length;
    const newItems = state.cart.filter((item) => action.item !== item.name);
    const newTotal = +state.total - (+action.itemPrice * +numberOfItems);

    return {
      ...state,
      cart: newItems,
      total: newTotal,
    };
  }

  if (action.type === SUBSTRACT_QUANTITY) {
    const newTotal = +state.total - +action.item.price;
    const newItems = state.cart.slice(0, state.cart.length);
    const myItemIndex = newItems.findIndex((item) => action.item.name === item.name);
    newItems.splice(myItemIndex, 1);

    return {
      ...state,
      cart: newItems,
      total: newTotal,
    };
  }

  return state;
};

export default menuReducer;
