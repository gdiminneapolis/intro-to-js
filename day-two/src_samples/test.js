var recipe = {
  recipeName: "Banana Bread Muffins",
  prepTime: 10,
  listIngredients: function() {
    var output = "";
    for(let i = 0; i < this.ingredients.length; i++){
      let ingredient = this.ingredients[i];
      output += ingredient.ingredientAmount;
      output += " ";
      output += ingredient.ingredientName;
    }
  },
  ingredients: [
    {"ingredientAmount": 3, "ingredientName": "Bananas"},
    {"ingredientAmount": 2, "ingredientName": "Eggs"},
    {"ingredientAmount": "1/3 Cup", "ingredientName": "Honey"}
  ]
};
