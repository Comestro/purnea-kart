
"use client";

import { Dropdown } from "flowbite-react";


export function Component({prop}) {

    
  return (
    <Dropdown label={prop}>
      <Dropdown.Item>Dashboard</Dropdown.Item>
      <Dropdown.Item>Settings</Dropdown.Item>
      <Dropdown.Item>Earnings</Dropdown.Item>
      <Dropdown.Item>Sign out</Dropdown.Item>
    </Dropdown>
  );
}
