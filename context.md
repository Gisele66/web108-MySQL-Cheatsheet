# Context & Custom Commands

## superStar! Command

**Trigger:** `superStar!`

**Action:** When you type "superStar!" in a message to me, I will automatically:

1. Run `git add .` - Stage all changes
2. Run `git commit -m "Update"` - Commit with a default message
3. Run `git push -u origin master` - Push to GitHub repository

**Usage Example:**
- You: "superStar!"
- I will execute the add, commit, and push workflow

This is a shorthand command to streamline your git workflow without needing to type out each git command individually.
