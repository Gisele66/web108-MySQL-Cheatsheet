# AI Assistant Prompts & Tasks

## Summary of Tasks Completed

### 1. Fix File Permissions
**Issue:** Files in the workspace couldn't be saved due to permission errors.
**Solution:** Changed ownership of all files to the user account.
```bash
sudo chown -R $USER:$USER /var/www/html/web-107/challenges
```

### 2. Convert File to Folder Structure
**Request:** Convert `web108-mysql-Cheatsheet.md` file into a folder structure.
**Action:** Created `web108-mysql-Cheatsheet/` folder and moved the file content to `README.md` inside it.
```bash
mkdir -p web108-mysql-Cheatsheet && mv web108-mysql-Cheatsheet.md web108-mysql-Cheatsheet/README.md
```

### 3. Add GitHub Remote Repository
**Request:** Add git remote origin for GitHub repository.
**Command Used:**
```bash
git remote add origin git@github.com:Gisele66/web108-MySQL-Cheatsheet.git
```

### 4. Create Custom Context File
**Request:** Create `context.md` with custom command prompt for automated git workflow.
**Custom Command:** When user types `superStar!` → automatically run:
- `git add .`
- `git commit -m "Update"`
- `git push -u origin master`

### 5. Push Files to GitHub
**Request:** Submit MySQL Cheatsheet README to GitHub repository.
**Action:** Added all files, committed, and pushed to repository.

### 6. Clean Up Git Tracking
**Request:** Remove accidentally included PHP files from git tracking.
**Files Removed from Git:**
- `day5-challenge2-php-syntax-guide.php`
- `php-guide.md`
- `php-guide.md.save`

**Important Note:** Do NOT commit/push all workspace files. Only track specific files requested by user.

### 7. Repository Cleanup
**Request:** Keep only MySQL Cheatsheet README and context.md in repository.
**Action:** Removed all other tracked files and folders from git history.

---

## Important Guidelines for Future Reference

1. **Only commit explicitly requested files** - Do not add entire workspace directories
2. **Ask for confirmation** before major git operations
3. **Use selective staging** - `git add [specific-file]` not `git add .` unless confirmed
4. **Respect custom commands** - Remember the `superStar!` trigger for automated commits/pushes
5. **Maintain .gitignore best practices** - Keep node_modules and large dependencies out of git

---

## GitHub Repository
- **URL:** git@github.com:Gisele66/web108-MySQL-Cheatsheet.git
- **Tracked Files:** 
  - `web108-mysql-Cheatsheet/README.md`
  - `context.md`

