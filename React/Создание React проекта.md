## Создаем папку с react проектом 

```
npx create-react-app name
```

---
## Создаем папки

- [[helpers]] / components
- [[navigation]]
- [[pages]] 

---
## Устанавливаем react-router-dom и react-hook-form

```
npm install react-router-dom
```
```
npm install react-hook-form
```

---
## Базовая настройка css

```
* {
	box-sizing: border-box;
	margin: 0;
	padding 0;
	/*your font*/
}
```

---

## Обновляем App.js

```
import { RouterProvider } from "react-router-dom";
import { routes } from "./navigation/routes";

export const App = () => {
  return <RouterProvider router={routes} />;
};

export default App;
```

---

*Поздравляем, вы создали базовый react проект, удачной верстки*
