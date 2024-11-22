Здесь создаем все для навигации и header и футером

---
## error-element.jsx

```
import React from "react";

const ErrorElement = () => {
    return (
        <div>Произошла ошибка</div>
    )
}

export default ErrorElement;
```

---
## layout.jsx

```
import React from "react";
import { Outlet } from "react-router-dom";
// подключаем другие компоненты

export const Layout = () => {
  return (
    <div style={{display: 'flex', flexDirection: 'column'}}>
	    //если нужно вставляем другие компоненты
        <Outlet/>
    </div>
  );
};
```

---
## routes.jsx

```
import React from "react";
import { createBrowserRouter } from "react-router-dom";
import ErrorElement from "./error-element";
import { Layout } from "./layout";

export const routes = createBrowserRouter([
  {
    Component: Layout,
    errorElement: <ErrorElement />,
    children: [
      {
        path: "/", // путь к компоненту
        Component: component_name, // компонент (нужно подключить)
      }
    ],
  },
]);
```

---
## Создание компонента 
Нужно создать папку с его именем, далее создать два файла
- name_component.jsx
- index.js
В первом обычное создание компонента
```
export const Name = () => {
    return (<div></div>)
}
```
Во втором экспортируем все это
```
export * from './name';
```

---
## Link

Импортируем `import { Link } from "react-router-dom";`
Вставляем в div
```
<Link to={"/"}></Link>
```

---
