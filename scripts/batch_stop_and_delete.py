import pyautogui

pyautogui.PAUSE = 5

while True:
    # Click first email in list.
    pyautogui.click(640, 330)

    # Stop it
    pyautogui.click(1760, 410)
    pyautogui.click(980, 1010)
    pyautogui.typewrite("STOP")
    pyautogui.press('enter')

    # Delete it
    pyautogui.click(1900, 238)
    pyautogui.click(1060, 957)
    pyautogui.press('enter')