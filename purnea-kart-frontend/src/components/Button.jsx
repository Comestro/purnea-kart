// import { forwardRef } from "react"
// import React from 'react'


// const Button = forwardRef(function Button({
//     Children,
//     type = 'button',
//     bgcolor = "bg-blue-600",
//     textColor = "text-white",
//     classname = "",
//     ...props   
// },ref) 
// {
//   return (
//     <div className={`px-4 py-2 rounded ${bgcolor} ${textColor} ${classname}`}{...props}>{Children}
//       <input type="button"></input>
//     </div>
//   )
// })

// export default Button





import React, { forwardRef } from 'react';

const Button = forwardRef(function Button(
  {
    children, 
    type = 'button',
    bgcolor = 'bg-blue-600',
    textColor = 'text-white',
    className = '',
    ...props
  },
  ref
) {
  return (
    <button
      ref={ref}
      type={type}
      className={`px-4 py-2 rounded ${bgcolor} ${textColor} ${className}`}
      {...props}
    >
      {children} 
    </button>
  );
});

export default Button;
