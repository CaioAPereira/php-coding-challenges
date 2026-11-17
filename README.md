# PHP Problem Solving & Algorithms

A repository dedicated to improving programming logic, data structures, and algorithms using PHP. The goal is to keep a track record of studies and LeetCode-style problem resolutions, focusing on clean code, automated tests, and high performance.

## Technologies
- PHP 8.x
- PHPUnit (Unit Testing)

## Project Structure
The challenges are organized by **Difficulty Level** and, internally, by the **Data Structure** or main concept applied. 

```text
/
├── README.md
├── composer.json
├── /Easy
│   └── /Stacks
│       └── /ValidParentheses
│           ├── Solution.php
│           └── SolutionTest.php
├── /Medium
│   └── /Arrays
│       └── /GroupAnagrams
│           ├── Solution.php
│           └── SolutionTest.php
└── /Hard
    └── /Graphs
```

## Progress & Solutions

| Difficulty | Topic | Challenge | Solution | Time (Big O) | Space (Big O) |
| :---: | :--- | :--- | :--- | :---: | :---: |
| 🟢 Easy | Stacks | [Valid Parentheses](https://leetcode.com/problems/valid-parentheses/) | [Code](./Easy/Stacks/ValidParentheses/Solution.php) | `O(n)` | `O(n)` |
| 🟡 Medium | Hash Maps | [Group Anagrams](https://leetcode.com/problems/group-anagrams/) | [Code](./Medium/Arrays/GroupAnagrams/Solution.php) | `O(n * k log k)`| `O(n * k)` |
| 🔴 Hard | ... | ... | ... | ... | ... |

## How to Run Locally

1. Clone the repository:
```bash
git clone https://github.com/CaioAPereira/php-coding-challenges.git
```

2. Install dependencies via Composer (for PHPUnit):
```bash
composer install
```

3. Run the full test suite:
```bash
./vendor/bin/phpunit
```

*Or run a specific test:*
```bash
./vendor/bin/phpunit Easy/Stacks/ValidParentheses/SolutionTest.php
```