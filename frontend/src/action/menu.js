export const GET_ALL_MEAL = 'GET_ALL_MEAL';
export const SAVE_ALL_MEAL = 'SAVE_ALL_MEAL';
export const GET_TYPE = 'GET_TYPE';
export const ALL_MEAL_BY_TYPE = 'ALL_MEAL_BY_TYPE';


export const getAllMeal = () => ({
  type: GET_ALL_MEAL,
});

export const saveAllMeal = (meal) => ({
  type: SAVE_ALL_MEAL,
  meal,
});

export const getType = (typeName) => ({
  type: GET_TYPE,
  typeName,
});

export const allMealByType = (mealList) => ({
  type: ALL_MEAL_BY_TYPE,
  mealList,
});
