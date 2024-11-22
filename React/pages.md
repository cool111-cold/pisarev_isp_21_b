Создаем компонент как описано здесь [[navigation]] и верстаем страницу, ниже будут нужные обработчики для каждой или для всех 

---
## Создание useState

- Подключаем `import { useState } from "react";`
- Создаем
```
const [name, setName] = useState('');
```

---
## Создание useEffect

- Подключаем `import { useEffect } from "react";`
- Создаем
```
useEffect(()=>{
    },[])
```

---
## Создание useNavigate

- Подключаем `import { useNavigate } from "react-router-dom";`
- Создаем
```
const navigate = useNavigate();
```
- используем
```
navigate('/');
```

---

## Создание useForm

- Подключаем `import { useForm } from "react-hook-form";`
- Создаем
```
const {
	register,
	handleSubmit,
	formState: { errors },
} = useForm();
```
- Верстаем
```
<form onSubmit={handleSubmit(onSubmit)}>
	<TextInput
		errors={errors}
		name={"email"}
		register={register}
		validate={{ required: true }}
		placeholder="Введите е-mail *"
	/>
	<button  type="submit" className="auth_btn"></button>
</form>
```
- Обработка данных 
```
const onSubmit = (data) => {
	console.log(data)
};
```

---

## LocalStorage

Получение значения 

```
const data = localStorage.getItem("name");
	if (data) {
	  const new_data = JSON.parse(data);
}
```

Запись значения

```
const data = localStorage.getItem("name");
const data_list = data ? JSON.parse(data) : [];
data_list.push(///);
localStorage.setItem("name", JSON.stringify(data_list));
```

---
