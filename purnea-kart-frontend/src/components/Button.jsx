import React from 'react'

function Button({
    Children,
    type = 'button',
    bgcolor = "bg-blue-600",
    textColor = "text-white",
    classname = "",
    ...props   // this for additional properties to be passed to the button
}) {
  return (
    <div className={`px-4 py-2 rounded ${bgcolor} ${textColor} ${classname}`}{...props}>{Children}</div>
  )
}

export default Button