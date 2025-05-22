## spacing

--spacing: 0.25rem;


```

padding/margin:
---------------
p-<number>  ---------> padding: calc(var(--spacing) * <number>); ----------> padding: calc(var(0.25rem) * 5);

px-<number> ---------> left-right
py-<number> ---------> top-bottom

ps -------> start
pe -------> end
pl -------> left
pr -------> right

```


## sizing

#### width (w-)
```
w-3xs -----> width: var(--container-3xs); /* 16rem (256px) */
w-2xs -----> width: var(--container-2xs); /* 18rem (288px) */
w-xs ------> width: var(--container-xs); /* 20rem (320px) */

w-sm ------> width: var(--container-sm); /* 24rem (384px) */
w-md ------> width: var(--container-md); /* 28rem (448px) */
w-lg ------> width: var(--container-lg); /* 32rem (512px) */
w-xl ------> width: var(--container-xl); /* 36rem (576px) */

w-2xl------> width: var(--container-2xl); /* 42rem (672px) */
w-3xl -----> width: var(--container-3xl); /* 48rem (768px) */

w-4xl -----> width: var(--container-4xl); /* 56rem (896px) */
w-5xl -----> width: var(--container-5xl); /* 64rem (1024px) */
w-6xl -----> width: var(--container-6xl); /* 72rem (1152px) */
w-7xl -----> width: var(--container-7xl); /* 80rem (1280px) */

w-<number> -----> width: calc(var(--spacing) * <number>);
w-30

w-<fraction> -------> width: calc(<fraction> * 100%);
w-1/2 -------------->
w-3/5 -------------->
w-any/any ---------->
w-full -------------> width: 100%;

w-auto ------------> element will take width according to the content
w-screen ----------> width: 100vw;

w-fit -----------> width: fit-content;

```

#### minimum width (min-w)
#### maxiimum width (max-w)

#### height (h-)
#### minimum height (min-h)
#### maxiimum height (max-h)
```
these are same like w-
```

## Typography

#### font-family
```
<p class="font-mono">The quick brown fox ...</p>
<p class="font-[Open_Sans]">Lorem ipsum dolor sit amet...</p>
<p class="font-(family-name:--my-font)">Lorem ipsum dolor sit amet...</p>
<p class="font-sans md:font-serif">change with breakpoint</p>
```

#### font-size
```
text-xs,sm,base,lg,xl,2xl...,9xl
text-[30px] -----> font-size: 30px;
md:text-sm ------> change with breakpoint
```

#### font-weight
```
font-thin ------------->  font-weight: 100;
font-extralight ------->  font-weight: 200;
font-light ------------>  font-weight: 300;
font-normal ----------->  font-weight: 400;
font-medium ----------->  font-weight: 500;
font-semibold --------->  font-weight: 600;
font-bold ------------->  font-weight: 700;
font-extrabold -------->  font-weight: 800;
font-black ------------>  font-weight: 900;

md:font-medium
```













